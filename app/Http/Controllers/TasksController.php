<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use Illuminate\Http\Request;
use Input;
use Redirect;

class TasksController extends Controller {
	protected $rules = [
		'name' => ['required', 'min:3']

	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks=Task::all();
		return view('tasks.index',compact('tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tasks.create');
	}

	/**
	 * * Store a newly created resource in storage.
	 * @param Request $request
	 * @return mixed
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);

		$input = Input::all();
		Task::create( $input );

		return Redirect::route('tasks.index')->with('message', 'Task created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Task $task)
	{
		return view('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Task $task)
	{
		return view('tasks.edit', compact('task'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Task $task,Request $request)
	{
		$this->validate($request, $this->rules);
		$input = array_except(Input::all(), '_method');
		$task->update($input);

		return Redirect::route('tasks.show', $task->id)->with('message', 'Todo updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Task $task)
	{
		$task->delete();

		return Redirect::route('tasks.index')->with('message', 'Todo deleted.');
	}

}
