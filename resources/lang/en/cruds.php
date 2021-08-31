<?php

return [
    'userManagement' => [
        'title'          => 'Management utilizator',
        'title_singular' => 'Management utilizator',
    ],
    'permission'     => [
        'title'          => 'Permisiunii',
        'title_singular' => 'Permisiune',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titlu',
            'title_helper'      => '',
            'created_at'         => 'Creat',
            'created_at_helper'  => '',
            'updated_at'         => 'Actualizat',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Sters',
            'deleted_at_helper'  => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roluri',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Titlu',
            'title_helper'       => '',
            'permissions'        => 'Permisiuni',
            'permissions_helper' => '',
            'created_at'         => 'Creat',
            'created_at_helper'  => '',
            'updated_at'         => 'Actualizat',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Sters',
            'deleted_at_helper'  => '',
        ],
    ],

    'contact'           => [
        'title'          => 'Contacte',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'id_user'             => 'ID_user',
            'id_user_helper'          => '',
            'title'              => 'Titlu',
            'title_helper'       => '',
            'permissions'        => 'Permisiuni',
            'name'              => 'Nume',
            'name_helper'       => '',
            'email'             => 'Email',
            'email_helper'      => '',
            'id_user'             => 'User Id',
            'id_user_helper'      => '',
            'phone'              => 'Telefon',
            'phone_helper'       => '',
            'date_from'         => 'Intrare',
            'date_from_helper'  => '',
            'series'             => 'Serie',
            'series_helper'      => '',
            'date_to'           => 'Iesire',
            'date_to_helper'    => '',
            'price'           => 'Pret',
            'price_helper'    => '',
            'accept'           => 'Accept',
            'accept_helper'    => '',
            'message'             => 'Mesaj',
            'message_helper'      => '',
            'image_name'           => 'Numele imaginii',
            'image_name_hrlper'    => '',
            'image_path'             => 'Path-ul imagini',
            'image_path_helper'      => '',
            'created_at'         => 'Creat',
            'created_at_helper'  => '',
            'updated_at'         => 'Actualizat',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Sters',
            'deleted_at_helper'  => '',
        ],
    ],

    'user'           => [
        'title'          => 'Utilizatori',
        'title_singular' => 'Utilizator',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nume',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verificat',
            'email_verified_at_helper' => '',
            'password'                 => 'Parola',
            'password_helper'          => '',
            'roles'                    => 'Roluri',
            'roles_helper'             => '',
            'contacts'                 => 'Contacte',
            'contacts_helper'          => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Creat',
            'created_at_helper'  => '',
            'updated_at'         => 'Actualizat',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Sters',
            'deleted_at_helper'  => '',
        ],
    ],



];