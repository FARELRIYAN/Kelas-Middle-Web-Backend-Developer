<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $agents = Agent::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%");
        })->paginate(10);

        return view('agents.index', compact('agents'));
    }

    public function create()
    {
        return view('agents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'release_date' => 'required|date',
            'image' => 'required|string',
        ]);

        Agent::create($request->all());

        return redirect()->route('agents.index')->with('success', 'Agent created successfully.');
    }

    public function show(Agent $agent)
    {
        return view('agents.show', compact('agent'));
    }

    public function edit(Agent $agent)
    {
        return view('agents.edit', compact('agent'));
    }

    public function update(Request $request, Agent $agent)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'release_date' => 'required|date',
            'image' => 'required|string',
        ]);

        $agent->update($request->all());

        return redirect()->route('agents.index')->with('success', 'Agent updated successfully.');
    }

    public function destroy(Agent $agent)
    {
        $agent->delete();

        return redirect()->route('agents.index')->with('success', 'Agent deleted successfully.');
    }
}