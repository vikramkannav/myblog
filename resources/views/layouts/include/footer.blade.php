
<div class="navbar navbar-default navbar-static-bottom">
    <p class="navbar-text pull-left blue_color-text">

    <ul>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy </a></li>
        <li><a href="#">FAQ</a></li>

    </ul>
    </p>

    <p class="navbar-text pull-right ">

        © 2017 Copyright India. All Rights Reserved.
    </p>
</div>

<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
    var ownerColumns = [
        { data: 'name', name: 'name' },




    ];
    $('#new-pet-owners-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": '{!! route("pet.applications") !!}',
        "columns": ownerColumns
    });
</script>