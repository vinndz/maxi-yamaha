<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard-admin');
    }

    public function dataTable()
    {
        $data = FormData::all();
        return response()->json(['data' => $data]);
    }

    public function exportExcelWithImages()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Phone');
        $sheet->setCellValue('E1', 'Instagram');
        $sheet->setCellValue('F1', 'Category');
        $sheet->setCellValue('G1', 'Motorcycle Type');
        $sheet->setCellValue('H1', 'Cost Estimation');
        $sheet->setCellValue('I1', 'link');
        $sheet->setCellValue('J1', 'Image');

        $row = 2;
        $formData = \App\Models\FormData::all();

        foreach ($formData as $data) {
            $sheet->setCellValue("A{$row}", $data->id);
            $sheet->setCellValue("B{$row}", $data->name);
            $sheet->setCellValue("C{$row}", $data->email);
            $sheet->setCellValue("D{$row}", $data->phone);
            $sheet->setCellValue("E{$row}", $data->instagram);
            $sheet->setCellValue("F{$row}", $data->category);
            $sheet->setCellValue("G{$row}", $data->type_motorcycle);
            $sheet->setCellValue("H{$row}", $data->cost_estimation);
            $sheet->setCellValue("I{$row}", $data->link);

            // ✅ Tambah gambar kalau ada
            $imagePath = storage_path("app/public/images/{$data->image}");
            if ($data->image && file_exists($imagePath)) {
                $drawing = new Drawing();
                $drawing->setName('Image');
                $drawing->setDescription('FormData Image');
                $drawing->setPath($imagePath);
                $drawing->setHeight(80); // ukuran gambar
                $drawing->setCoordinates("J{$row}"); // taruh di kolom F
                $drawing->setWorksheet($sheet);

                // Sesuaikan tinggi baris
                $sheet->getRowDimension($row)->setRowHeight(80);
                $sheet->getColumnDimension('G')->setWidth(20);
            }

            $row++;
        }

        // Simpan & download
        $writer = new Xlsx($spreadsheet);
        $fileName = 'formdata_with_images.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);

        return response()->download($temp_file, $fileName)->deleteFileAfterSend(true);
    }

    // public function exportPdf()
    // {
    //     $data = FormData::all();

    //     $pdf = Pdf::loadView('exports.formdata_pdf', compact('data'))
    //         ->setPaper('a4', 'landscape');

    //     return $pdf->download('formdata.pdf');
    // }

    public function exportPdf(Request $request)
    {
        $query = FormData::query();

        // contoh filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // contoh filter by search (name, email, instagram)
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%'.$request->search.'%')
                ->orWhere('email', 'like', '%'.$request->search.'%')
                ->orWhere('category', 'like', '%'.$request->search.'%')
                ->orWhere('instagram', 'like', '%'.$request->search.'%');
            });
        }

        $data = $query->get();

        $pdf = Pdf::loadView('exports.formdata_pdf', compact('data'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('formdata.pdf');
    }



    public function printData()
    {
        $data = FormData::all();
        return view('exports.formdata_print', compact('data'));
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
