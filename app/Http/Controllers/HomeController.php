<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Impact;
use App\Models\PortfolioProject;
use App\Models\Career;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $members = Member::all();
        $contact = Contact::first() ?? new Contact();
        $projects = PortfolioProject::with('service')->get();
        $impacts = Impact::all();
        $careers = Career::all();

        return view('welcome', compact('services', 'members', 'contact', 'projects', 'impacts', 'careers'));
    }

    public function showProject($id)
    {
        $project = PortfolioProject::with('service')->findOrFail($id);
        return view('project_details', compact('project'));
    }

    public function careers()
    {
        $careers = Career::where(function ($query) {
            $query->whereNull('deadline')
                ->orWhere('deadline', '>=', now()->format('Y-m-d'));
        })->get();

        $contact = Contact::first() ?? new Contact();
        $services = Service::all();
        return view('careers', compact('careers', 'contact', 'services'));
    }
}
