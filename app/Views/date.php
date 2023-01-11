<?= $this->include('include/top')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajax">Save changes</button>
      </div>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Treatment</th>
      <th scope="col">status</th>
    </tr>
  </thead>

  <tbody class="bookingdata">
  </tbody>

</table>    

<?= $this->include('include/end')?>

<script>
    $(document).ready(function(){
        $(document).on('click','.ajax', function(){
            alert("hello");
        });
    });

    $(document).ready(function(){
        loaduser();
    });

    function loaduser(){
        $.ajax({
            method:"GET",
            url:"/try",
            success: function(response){
                $.each(response.user, function(key, value){
                    //console.log(value['firstname']);
                    $('.bookingdata').append(
                        '<tr>\
                            <td>' +value['id']+'</td>\
                            <td>' +value['firstname']+'</td>\
                            <td>' +value['lastname']+'</td>\
                            <td>' +value['treatment']+'</td>\
                        </tr>'
                    );
                });
            }
        });
    }


</script>
</body>
</html>