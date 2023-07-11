<?php

function is_logged_in() {
    // Get the CodeIgniter instance
    $ci = &get_instance();

    // Check if the 'username' session data exists
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        // Get the user menu
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();

        // Check if the menu exists
        if ($queryMenu && isset($queryMenu['id'])) {
            $menu_id = $queryMenu['id'];

            // Check the user access
            $userAccess = $ci->db->get_where('user_access_menu', [
                'role_id' => $role_id,
                'menu_id' => $menu_id
            ]);

            // Continue with the rest of the function logic
        } else {
            // Handle the case when the menu does not exist or the 'id' element is not set
        }
    }
}

function check_access($role_id, $menu_id) {
    $ci = &get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    } else {
        return "";
    }
}
