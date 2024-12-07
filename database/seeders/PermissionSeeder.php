<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            ['id' => 1, 'name' => 'change locale', 'guard_name' => 'web'],
            ['id' => 2, 'name' => 'update preferences', 'guard_name' => 'web'],
            ['id' => 3, 'name' => 'clear cache', 'guard_name' => 'web'],
            ['id' => 4, 'name' => 'see navbar', 'guard_name' => 'web'],
            ['id' => 5, 'name' => 'see dashboard', 'guard_name' => 'web'],
            ['id' => 6, 'name' => 'read settings', 'guard_name' => 'web'],
            ['id' => 7, 'name' => 'update settings', 'guard_name' => 'web'],
            ['id' => 8, 'name' => 'see history', 'guard_name' => 'web'],
            ['id' => 9, 'name' => 'clear history', 'guard_name' => 'web'],
            ['id' => 10, 'name' => 'see unpublished items', 'guard_name' => 'web'],
            ['id' => 11, 'name' => 'read subscriptions', 'guard_name' => 'web'],
            ['id' => 12, 'name' => 'read news', 'guard_name' => 'web'],
            ['id' => 13, 'name' => 'create news', 'guard_name' => 'web'],
            ['id' => 14, 'name' => 'update news', 'guard_name' => 'web'],
            ['id' => 15, 'name' => 'delete news', 'guard_name' => 'web'],
            ['id' => 16, 'name' => 'read places', 'guard_name' => 'web'],
            ['id' => 17, 'name' => 'create places', 'guard_name' => 'web'],
            ['id' => 18, 'name' => 'update places', 'guard_name' => 'web'],
            ['id' => 19, 'name' => 'delete places', 'guard_name' => 'web'],
            ['id' => 20, 'name' => 'read blocks', 'guard_name' => 'web'],
            ['id' => 21, 'name' => 'create blocks', 'guard_name' => 'web'],
            ['id' => 22, 'name' => 'update blocks', 'guard_name' => 'web'],
            ['id' => 23, 'name' => 'delete blocks', 'guard_name' => 'web'],
            ['id' => 24, 'name' => 'read project_categories', 'guard_name' => 'web'],
            ['id' => 25, 'name' => 'create project_categories', 'guard_name' => 'web'],
            ['id' => 26, 'name' => 'update project_categories', 'guard_name' => 'web'],
            ['id' => 27, 'name' => 'delete project_categories', 'guard_name' => 'web'],
            ['id' => 28, 'name' => 'read contacts', 'guard_name' => 'web'],
            ['id' => 29, 'name' => 'create contacts', 'guard_name' => 'web'],
            ['id' => 30, 'name' => 'update contacts', 'guard_name' => 'web'],
            ['id' => 31, 'name' => 'delete contacts', 'guard_name' => 'web'],
            ['id' => 32, 'name' => 'read events', 'guard_name' => 'web'],
            ['id' => 33, 'name' => 'create events', 'guard_name' => 'web'],
            ['id' => 34, 'name' => 'update events', 'guard_name' => 'web'],
            ['id' => 35, 'name' => 'delete events', 'guard_name' => 'web'],
            ['id' => 36, 'name' => 'read files', 'guard_name' => 'web'],
            ['id' => 37, 'name' => 'create files', 'guard_name' => 'web'],
            ['id' => 38, 'name' => 'update files', 'guard_name' => 'web'],
            ['id' => 39, 'name' => 'delete files', 'guard_name' => 'web'],
            ['id' => 40, 'name' => 'read forum_categories', 'guard_name' => 'web'],
            ['id' => 41, 'name' => 'create forum_categories', 'guard_name' => 'web'],
            ['id' => 42, 'name' => 'update forum_categories', 'guard_name' => 'web'],
            ['id' => 43, 'name' => 'delete forum_categories', 'guard_name' => 'web'],
            ['id' => 44, 'name' => 'read forum_discussions', 'guard_name' => 'web'],
            ['id' => 45, 'name' => 'delete forum_discussions', 'guard_name' => 'web'],
            ['id' => 46, 'name' => 'read menulinks', 'guard_name' => 'web'],
            ['id' => 47, 'name' => 'create menulinks', 'guard_name' => 'web'],
            ['id' => 48, 'name' => 'update menulinks', 'guard_name' => 'web'],
            ['id' => 49, 'name' => 'delete menulinks', 'guard_name' => 'web'],
            ['id' => 50, 'name' => 'read menus', 'guard_name' => 'web'],
            ['id' => 51, 'name' => 'create menus', 'guard_name' => 'web'],
            ['id' => 52, 'name' => 'update menus', 'guard_name' => 'web'],
            ['id' => 53, 'name' => 'delete menus', 'guard_name' => 'web'],
            ['id' => 54, 'name' => 'read pages', 'guard_name' => 'web'],
            ['id' => 55, 'name' => 'create pages', 'guard_name' => 'web'],
            ['id' => 56, 'name' => 'update pages', 'guard_name' => 'web'],
            ['id' => 57, 'name' => 'delete pages', 'guard_name' => 'web'],
            ['id' => 58, 'name' => 'read partners', 'guard_name' => 'web'],
            ['id' => 59, 'name' => 'create partners', 'guard_name' => 'web'],
            ['id' => 60, 'name' => 'update partners', 'guard_name' => 'web'],
            ['id' => 61, 'name' => 'delete partners', 'guard_name' => 'web'],
            ['id' => 62, 'name' => 'read projects', 'guard_name' => 'web'],
            ['id' => 63, 'name' => 'create projects', 'guard_name' => 'web'],
            ['id' => 64, 'name' => 'update projects', 'guard_name' => 'web'],
            ['id' => 65, 'name' => 'delete projects', 'guard_name' => 'web'],
            ['id' => 66, 'name' => 'read roles', 'guard_name' => 'web'],
            ['id' => 67, 'name' => 'create roles', 'guard_name' => 'web'],
            ['id' => 68, 'name' => 'update roles', 'guard_name' => 'web'],
            ['id' => 69, 'name' => 'delete roles', 'guard_name' => 'web'],
            ['id' => 70, 'name' => 'read page_sections', 'guard_name' => 'web'],
            ['id' => 71, 'name' => 'create page_sections', 'guard_name' => 'web'],
            ['id' => 72, 'name' => 'update page_sections', 'guard_name' => 'web'],
            ['id' => 73, 'name' => 'delete page_sections', 'guard_name' => 'web'],
            ['id' => 74, 'name' => 'read slides', 'guard_name' => 'web'],
            ['id' => 75, 'name' => 'create slides', 'guard_name' => 'web'],
            ['id' => 76, 'name' => 'update slides', 'guard_name' => 'web'],
            ['id' => 77, 'name' => 'delete slides', 'guard_name' => 'web'],
            ['id' => 78, 'name' => 'read tags', 'guard_name' => 'web'],
            ['id' => 79, 'name' => 'create tags', 'guard_name' => 'web'],
            ['id' => 80, 'name' => 'update tags', 'guard_name' => 'web'],
            ['id' => 81, 'name' => 'delete tags', 'guard_name' => 'web'],
            ['id' => 82, 'name' => 'read translations', 'guard_name' => 'web'],
            ['id' => 83, 'name' => 'create translations', 'guard_name' => 'web'],
            ['id' => 84, 'name' => 'update translations', 'guard_name' => 'web'],
            ['id' => 85, 'name' => 'delete translations', 'guard_name' => 'web'],
            ['id' => 86, 'name' => 'read users', 'guard_name' => 'web'],
            ['id' => 87, 'name' => 'create users', 'guard_name' => 'web'],
            ['id' => 88, 'name' => 'update users', 'guard_name' => 'web'],
            ['id' => 89, 'name' => 'delete users', 'guard_name' => 'web'],
            ['id' => 90, 'name' => 'impersonate users', 'guard_name' => 'web'],
            ['id' => 91, 'name' => 'read taxonomies', 'guard_name' => 'web'],
            ['id' => 92, 'name' => 'create taxonomies', 'guard_name' => 'web'],
            ['id' => 93, 'name' => 'update taxonomies', 'guard_name' => 'web'],
            ['id' => 94, 'name' => 'delete taxonomies', 'guard_name' => 'web'],
            ['id' => 95, 'name' => 'read terms', 'guard_name' => 'web'],
            ['id' => 96, 'name' => 'create terms', 'guard_name' => 'web'],
            ['id' => 97, 'name' => 'update terms', 'guard_name' => 'web'],
            ['id' => 98, 'name' => 'delete terms', 'guard_name' => 'web'],
        ];

        DB::table('permissions')->insert($permissions);
    }
}
