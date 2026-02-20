<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Impact;
use App\Models\PortfolioProject;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $members = Member::all();
        $contact = Contact::first() ?? new Contact();
        $projects = PortfolioProject::with('service')->get();
        $impacts = Impact::all();

        return view('welcome', compact('services', 'members', 'contact', 'projects', 'impacts'));
    }

    public function showProject($id)
    {
        $project = PortfolioProject::with('service')->findOrFail($id);
        return view('project_details', compact('project'));
    }
}
