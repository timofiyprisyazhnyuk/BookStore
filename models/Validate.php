<?phpclass Validate{    /**     * Validation new Book and return errors     *     * @return array     */    public static function booksValidator()    {        $errors = [];        if (!preg_match("/^[a-z\d_ ]{3,27}$/i", $_POST['title'])) {            $errors['title'] = 'Title format invalid, input (minimum 3, maximum 21 signs).';        }        if (!strlen($_POST['year_release']) != 4 && $_POST['year_release'] <= 1700 ||            $_POST['year_release'] > date('Y')) {            $errors['year_release'] = 'Year Release format invalid, (1700 - ' . date('Y') . ' year).';        }        if ($_POST['format'] !== 'DVD' && $_POST['format'] !== 'VHS' && $_POST['format'] !== 'Blu-Ray') {            $errors['format'] = 'Book format invalid, (use some format (VHS, DVD, Blu-Ray).';        }        if (!preg_match("/^[a-z\d_ ]{3,27}$/i", $_POST['stars_first'])) {            $errors['stars_first'] = 'Actors first name format invalid, input (minimum 3, maximum 21 signs).';        }        if (!preg_match("/^[a-z\d_ ]{3,27}$/i", $_POST['stars_last'])) {            $errors['stars_last'] = 'Actors last name format invalid, input (minimum 3, maximum 21 signs).';        }        return $errors;    }    /**     * Validate upload file     *     * @param $file     * @return array     */    public static function fileValidator($file)    {        $errors = [];        if (@end(explode('.', $file['name'])) != 'txt') {            $errors['format'] = 'File type must be at "txt"';        }        if ($file["size"] >= 5000000) {            $errors['size'] = 'File size must be not more 5mb';        }        return $errors;    }    /**     * Validation new Book and return errors     *     * @param $item     * @return bool     */    public static function uploadFileValidator($item)    {        $errors = true;        if (!preg_match("/^[a-z\d_ ]{3,27}$/i", trim($item[0][1])))            $errors = false;        if (!strlen((int)$item[1][1]) != 4 && (int)$item[1][1] <= 1700 || (int)$item[1][1] > date('Y'))            $errors = false;        if (trim($item[2][1]) !== 'DVD' && trim($item[2][1]) !== 'VHS' && trim($item[2][1]) !== 'Blu-Ray')            $errors = false;        return $errors;    }}