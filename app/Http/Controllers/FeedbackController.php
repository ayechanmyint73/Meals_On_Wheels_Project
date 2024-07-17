<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Member;
use App\Models\Order;
use App\Http\Requests\StoreFeedbackRequest;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function create($order_id){
        $order = Order::findOrFail($order_id);
        $member = Member::where('user_id', Auth::id())->first();
        
        if (!$member) {
            return redirect()->back()->with('error', 'Member record not found.');
        }
        
        return view('Users.Member.feedback.create', compact('order', 'member'));
    }

    public function store(StoreFeedbackRequest $request){
        $validated = $request->validated();
        
        // Method 1: Using User's ID directly
        $user_id = Auth::id();
        
        // Method 2: Fetching Member record separately
        $member = Member::where('user_id', $user_id)->first();
        
        if (!$member) {
            return redirect()->back()->with('error', 'Unable to submit feedback. Member record not found.');
        }
        
        $feedback = Feedback::create([
            'order_id' => $validated['order_id'],
            'member_id' => $member->id, // Use the fetched member's ID
            'rating' => $validated['rating'],
            'comments' => $validated['comments'],
            'feedback_date' => now(),
        ]);

        return redirect()->route('feedback.show', $feedback)
            ->with('success', 'Feedback submitted successfully!');
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('Users.Member.feedback.show', compact('feedback'));
    }
}