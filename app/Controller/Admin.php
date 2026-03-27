<?php
namespace Controller;

use Model\Department;
use Model\Room;
use Model\Phone;
use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Admin
{
    private function checkAdmin(): void
    {
        if (!Auth::check() || !Auth::user() || !Auth::user()->isAdmin()) {
            app()->route->redirect('/hello');
            exit;
        }
    }

    private function renderAdmin(string $message = ''): string
    {
        return new View('admin.index', [
            'departments' => Department::all(),
            'rooms' => Room::all(),
            'phones' => Phone::all(),
            'users' => User::where('role_id', 2)->get(),
            'message' => $message
        ]);
    }

    public function index(): string
    {
        $this->checkAdmin();
        return $this->renderAdmin();
    }

    public function directory(): string
    {
        $this->checkAdmin();

        return new View('admin.directory', [
            'departments' => Department::all(),
            'rooms' => Room::all(),
            'phones' => Phone::all(),
        ]);
    }

    public function addDepartment(Request $request): string
    {
        $this->checkAdmin();

        Department::create([
            'name' => $request->name,
            'department_type' => $request->department_type,
        ]);

        return $this->renderAdmin('Подразделение успешно добавлено');
    }

    public function addRoom(Request $request): string
    {
        $this->checkAdmin();

        Room::create([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'room_type' => $request->room_type,
        ]);

        return $this->renderAdmin('Помещение успешно добавлено');
    }

    public function addPhone(Request $request): string
    {
        $this->checkAdmin();

        $data = [
            'phone_number' => $request->phone_number,
            'room_id' => $request->room_id,
            'user_id' => $request->user_id ?: null,
        ];

        Phone::create($data);

        return $this->renderAdmin('Телефон успешно добавлен');
    }
}