<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    // Admin, staff, viewer: boleh melihat
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Book $book): bool
    {
        return true;
    }

    // Admin & staff: boleh create dan edit
    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isStaff();
    }

    public function update(User $user, Book $book): bool
    {
        return $user->isAdmin() || $user->isStaff();
    }

    // Hanya admin: boleh delete
    public function delete(User $user, Book $book): bool
    {
        return $user->isAdmin();
    }

    public function deleteAny(User $user): bool
    {
        return $user->isAdmin();
    }

    public function restore(User $user, Book $book): bool
    {
        return $user->isAdmin();
    }

    public function forceDelete(User $user, Book $book): bool
    {
        return $user->isAdmin();
    }
}
