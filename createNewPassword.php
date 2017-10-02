function createNewPassword($available_sets = 'luds')
    {
        $sets = array();
        if(strpos($available_sets, 'l') !== false){
                array_push($sets, substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, substr_count($available_sets, 'l')));
        }
        if(strpos($available_sets, 'u') !== false){
            array_push($sets, substr(str_shuffle('ABCDEFGHJKMNPQRSTUVWXYZ'), 0, substr_count($available_sets, 'u')));

        }
        if(strpos($available_sets, 'd') !== false){
            array_push($sets, substr(str_shuffle('0123456789'), 0, substr_count($available_sets, 'd')));

        }
        if(strpos($available_sets, 's') !== false){
            array_push($sets, substr(str_shuffle('!@#$%^&*?_~'), 0, substr_count($available_sets, 's')));

        }

        return join("", $sets);

    }
