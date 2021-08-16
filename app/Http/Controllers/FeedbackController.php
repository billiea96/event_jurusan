<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Subject;

use App\Feedback;

use App\Http\Requests\FeedbackFormRequest;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('contact.contact', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackFormRequest $request)
    {
        $arrData = array('nama'=>$request->get('nama'), 'alamat_email'=>$request->get('email'), 'isi'=>$request->get('message'), 'subject_id'=>$request->get('subject'));
        $feedback = new Feedback($arrData);
        $feedback->save();
        $subject = Subject::whereId($arrData['subject_id'])->firstOrFail();
        return redirect('feedback')->with('status', 'Dear '.$arrData['nama'].', '.$subject->nama.' Anda berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAll() {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index', ['feedbacks' => $feedbacks]);
    }
}
