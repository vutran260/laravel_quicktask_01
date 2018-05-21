<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Task\TaskInterface;
use App\Repositories\User\UserInterface;
use App\Http\Requests\StoreTaskRequest;
use Exception;

class TaskController extends Controller
{
    protected $taskRepository;
    protected $userRepository;

    public function __construct(
        TaskInterface $taskRepository,
        UserInterface $userRepository
    ) {
        $this->taskRepository = $taskRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->userRepository->getTasksById(auth()->id());

        return view('site.pages.tasks.list', compact('tasks'));
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
    public function store(StoreTaskRequest $request)
    {
        $data = $request->only('name');

        try {
            $this->userRepository->createTask($data);
            $message = trans('messages.create_task_success');
        } catch (Exception $e) {
            throw $e;
            $message = trans('messages.create_task_unsuccess');
        }

        return redirect()
                ->action('TaskController@index')
                ->with('message', $message);
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
        try {
            $this->authorize('destroy', $this->taskRepository->find($id));
            $this->taskRepository->delete($id);
            $message = trans('messages.delete_task_success');
        } catch (Exception $e) {
            $message = trans('messages.delete_task_unsuccess');
        }

        return redirect()
            ->action('TaskController@index')
            ->with('message', $message);
    }
}
