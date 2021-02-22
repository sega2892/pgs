<?php


namespace Laravel\Calc\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Calc\Calc\Contracts\CalcInterface;
use Laravel\Calc\Calc\OpResolver;

class CalcControllers extends Controller
{
    public function index()
    {
        return view('calc:form');
    }

    public function calc(Request $request, CalcInterface $calc)
    {
        $v1 = floatval($request->v1);
        $op = OpResolver::resolver($request->op);
        $v2 = floatval($request->v2);

        return $calc->calc($v1,$op,$v2);
    }
}