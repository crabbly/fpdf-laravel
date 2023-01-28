<?php

namespace Tests\Unit\Entities\Api;

use Crabbly\Fpdf\FPDF;
use Tests\BaseUnitTestCase;
use Throwable;

class FpdfTest extends BaseUnitTestCase
{
    /**
     * @throws Throwable
     */
    public function test_fpdf_with_output_s_should_return_binary_string()
    {
        // Given
        $fpdf = new FPDF();
        $fpdf->AddPage();
        $fpdf->SetFont('arial','B',12);
        $fpdf->Cell(70,5,"Name",0,0,'L');
        $fpdf->Cell(70,5,"Email",0,0,'L');
        $fpdf->Cell(70,5,"Phone",0,1,'L');

        // When
        $output = $fpdf->Output('S');

        // Should
        $this->assertNotEmpty($output);
    }

    /**
     * @throws Throwable
     */
    public function test_fpdf_with_output_f_should_save_to_local_file()
    {
        // Given
        $fpdf = new FPDF();
        $fpdf->AddPage();
        $fpdf->SetFont('arial','B',12);
        $fpdf->Cell(70,5,"Name",0,0,'L');
        $fpdf->Cell(70,5,"Email",0,0,'L');
        $fpdf->Cell(70,5,"Phone",0,1,'L');

        $fileName = "docTest.pdf";

        // When
        $fpdf->Output('F', $fileName);

        // Should
        $this->assertFileExists($fileName);

        unlink($fileName);
    }
}