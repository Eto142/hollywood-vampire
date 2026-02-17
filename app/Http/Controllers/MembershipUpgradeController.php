    /**
     * Admin: List all membership upgrade requests.
     */
    public function adminIndex()
    {
        $upgrades = \App\Models\MembershipUpgrade::with('user')->latest()->paginate(20);
        return view('admin.membership_upgrades.index', compact('upgrades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.membership_upgrades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'previous_membership' => 'nullable|string',
            'new_membership' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);
        $validated['status'] = 'pending';
        \App\Models\MembershipUpgrade::create($validated);
        return redirect()->route('membership-upgrades.index')->with('status', 'Upgrade request created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $upgrade = \App\Models\MembershipUpgrade::with('user')->findOrFail($id);
        return view('admin.membership_upgrades.show', compact('upgrade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $upgrade = \App\Models\MembershipUpgrade::findOrFail($id);
        return view('admin.membership_upgrades.edit', compact('upgrade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $upgrade = \App\Models\MembershipUpgrade::findOrFail($id);
        $validated = $request->validate([
            'new_membership' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string',
        ]);
        $upgrade->update($validated);
        return redirect()->route('membership-upgrades.index')->with('status', 'Upgrade updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $upgrade = \App\Models\MembershipUpgrade::findOrFail($id);
        $upgrade->delete();
        return redirect()->route('membership-upgrades.index')->with('status', 'Upgrade deleted.');
    }

