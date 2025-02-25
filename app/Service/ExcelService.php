<?php 
namespace App\Service;

use App\Districts;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelService
{
    public static function export($header, $data)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $col = 'A';
        $row = 1;

        //header
        foreach ($header as $k => $v) {
            $cell = $col . $row;
            $value = $v;
            $col++;
            $sheet->setCellValue($cell, $v['label']);
        }

        $row++;

        //data body
        foreach($data as $v) {
            $col = 'A';
            foreach ($header as $h) {
                $cell = $col . $row;
                $sheet->setCellValue($cell, $v[$h['key']]);
                $col++;
            }
            $row++;
        }


        $filename = 'export-file-'.date("Ymd-His").'.xlsx';
        $path = '/tmp/' . $filename;
        $writer = new Xlsx($spreadsheet);
        $res = $writer->save($path);

        return response()->download($path, $filename, [
            'Content-Type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
}