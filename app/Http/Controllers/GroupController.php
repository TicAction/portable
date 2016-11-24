<?php

namespace App\Http\Controllers;

use App\Group;
use App\Reservation;
use Illuminate\Http\Request;

class GroupController extends Controller
{
  public function create()
  {

      $group = Reservation::all();
       
      return view('groups.create',compact('group'));
}
}
