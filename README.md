# CodeIgniter 4 Login Application

this repository is used to test login application on codeigniter4

## Starting the project

To start the project first you need to run `composer install`. to install all the required dependencies

next run `php spark serve` and you're ready to go

## Important Files to watch

some notable files to look out for such as

- `UserController.php` this is where the meat of the Login
- `Views\welcome_message.php` this is the page to check wether you have logged in or not
- `Views\login\index.php` this is the login form
- `Database\ci4.sql` this is the database used for this application


## Upload file snippets

- __Create__
```
'cover' => [
  'rules' => 'max_size[cover, 1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
]

$file = $this->request->getFile('fileField');
if($file->getError() == 4) {
  $fileName = 'placeholder.png';
}
 else {
  $fileName = $file->getRandomName();
  $file->move('img', $fileName);
}
```

- __Edit__
> When editing file make a new input that holds the old image
```
if($this->request->getVar('oldFile') != 'file.png'){
  unlink('img/' . $this->request->getVar('oldCFile'));
}
```
