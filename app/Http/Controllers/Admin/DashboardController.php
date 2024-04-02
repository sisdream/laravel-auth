<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $projects = Project::paginate(10);
    return view('admin.projects.index', compact('projects'));
  }
}
