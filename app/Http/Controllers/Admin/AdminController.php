<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Impact;
use App\Models\PortfolioProject;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // For simplicity, using hardcoded login for now
        // Later we can integrate with Laravel Auth
        if ($request->username === 'root' && $request->password === 'root1234') {
            session(['admin_auth' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        if (!session('admin_auth')) {
            return redirect()->route('admin.login');
        }

        $services = Service::all();
        $members = Member::all();
        $contact = Contact::first() ?? new Contact();
        $projects = PortfolioProject::with('service')->get();
        $impacts = Impact::all();

        return view('admin.dashboard', compact('services', 'members', 'contact', 'projects', 'impacts'));
    }

    public function saveProject(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'service_id' => 'required|exists:services,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'html_content' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('Images/projects'), $imageName);
            $data['image'] = 'Images/projects/' . $imageName;
        }

        if ($request->id) {
            $project = PortfolioProject::findOrFail($request->id);
            $project->update($data);
        } else {
            PortfolioProject::create($data);
        }

        return response()->json(['success' => true]);
    }

    public function deleteProject($id)
    {
        PortfolioProject::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }

    public function saveMember(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer',
            'name' => 'required|string',
            'role' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('Images/members'), $imageName);
            $data['image'] = 'Images/members/' . $imageName;
        }

        if ($request->id) {
            $member = Member::findOrFail($request->id);
            $member->update($data);
        } else {
            Member::create($data);
        }

        return response()->json(['success' => true]);
    }

    public function deleteMember($id)
    {
        Member::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }

    public function saveService(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer',
            'name' => 'required|string',
            'icon' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($request->id) {
            $service = Service::findOrFail($request->id);
            $service->update($data);
        } else {
            Service::create($data);
        }

        return response()->json(['success' => true]);
    }

    public function deleteService($id)
    {
        Service::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }

    public function saveContact(Request $request)
    {
        $data = $request->all();
        $contact = Contact::first() ?? new Contact();
        $contact->fill($data);
        $contact->save();

        return response()->json(['success' => true]);
    }

    public function saveImpact(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer',
            'name' => 'required|string',
            'icon' => 'required|string',
            'text' => 'required|string',
        ]);

        if ($request->id) {
            $impact = Impact::findOrFail($request->id);
            $impact->update($data);
        } else {
            Impact::create($data);
        }

        return response()->json(['success' => true]);
    }

    public function deleteImpact($id)
    {
        Impact::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}

