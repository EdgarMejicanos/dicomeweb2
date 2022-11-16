<?php

namespace App\Http\Controllers\pages;
namespace Illuminate\Support\Facades;

use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use App\Models\Report;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use App\Models\Cliente;

class Reports extends Controller
{
    //
    public function index()
    {
      $reports = Report::all();
      return view('content.pages.reports',['reports'=>$reports]);
    }
    public function create()
    {
      $clientes = Cliente::all();
      $date = date('Y-m-d_hh:mm:ss');
      $pdf = Pdf::loadView('pdf.clientes', compact('clientes'));
      Storage::put('public/pdf/'.$date.".pdf", $pdf->output());
      $report = new Report();
      $report->url = $date.".pdf";
      $report->save();

      return redirect()->route('pages-reports');
    }
    public function delete($id)
    {
      $report = Report::find($id);
      Storage::delete('public/pdf/'.$report->url());

      $report->delete();
      return redirect()->route('pages-reports');
    }
}
