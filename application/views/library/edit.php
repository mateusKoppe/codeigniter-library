<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Library</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container pt-5">
		<h1> Library </h1>
		<p> This is just a basic Crud </p>

        <form method="post">
            <div class="form-group">
                <label for="nameInput">Name</label>
                <input name="name" class="form-control" id="nameInput" placeholder="Name" value="<?php echo set_value('name', $book->name) ?>">
            </div>
            <div class="form-group">
                <label for="descriptionInput">Description</label>
                <textarea name="description" class="form-control" id="descriptionInput" placeholder="Description"><?php echo set_value('description', $book->description) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

		<div class="mt-3">
			<a href="<?php echo base_url('library/show/' . $book->id) ?>" class="btn btn-link">Back</a>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
