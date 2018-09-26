<?phpclass Validate{    /**     *     */    public static function booksValidator()    {        $errors = [];        if (!preg_match("/^[a-z\d_]{3,27}$/i", $_POST['title'])) {            $errors['title'] = 'Title format invalid, input (minimum 3, maximum 21 signs).';        }        if (!strlen($_POST['year_release']) != 4 && $_POST['year_release'] <= 1700 ||            $_POST['year_release'] > date('Y')) {            $errors['year_release'] = 'Year Release format invalid, (1700 - ' . date('Y') . ' year).';        }        if ($_POST['format'] !== 'DVD' && $_POST['format'] !== 'VHS' && $_POST['format'] !== 'Blu-Ray') {            $errors['format'] = 'Book format invalid, (use some format (VHS, DVD, Blu-Ray).';        }        if (!preg_match("/^[a-z\d_]{3,27}$/i", $_POST['stars_first'])) {            $errors['stars_first'] = 'Actors first name format invalid, input (minimum 3, maximum 21 signs).';        }        if (!preg_match("/^[a-z\d_]{3,27}$/i", $_POST['stars_last'])) {            $errors['stars_last'] = 'Actors last name format invalid, input (minimum 3, maximum 21 signs).';        }        return $errors;    }}