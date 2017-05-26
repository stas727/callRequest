<?php
namespace stas727\callRequest\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Created by PhpStorm.
 * User: stasm
 * Date: 26.05.2017
 * Time: 13:48
 */
class CallRequestController extends Controller
{
   public function index(Request $request)
   {
      if ($request->has('weight') && $request->has('high')) {
         $weight = $request->get('weight');
         $high = $request->get('high');
         $callRequest = round($weight / ($high * $high), 1);
      }
      return view('callRequest::index', compact('callRequest'));
   }
}