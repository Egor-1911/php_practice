<?php
namespace Controller;

use Model\Department;
use Model\Room;
use Model\Phone;
use Model\User;
use Src\View;
use Src\Request;

class Admin {
    public function index(): string
    {
        return (new View('admin.index', [
            'departments' => \Model\Department::all(),
            'rooms' => \Model\Room::all(),
            'phones' => \Model\Phone::all(),
            'users' => \Model\User::where('role_id', 2)->get()
        ]));
    }

    public function addDepartment(Request $request): void {
        Department::create($request->all());
        app()->route->redirect('/admin');
    }

    public function addRoom(Request $request): void {
        Room::create($request->all());
        app()->route->redirect('/admin');
    }

    public function addPhone(Request $request): void {
        Phone::create($request->all());
        app()->route->redirect('/admin');
    }
}
