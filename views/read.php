<!-- IMPORT NAV -->
<?php include('partials/nav.php'); ?>

<!-- main conten -->
<h1 class="text-3xl py-4 font-bold drop-shadow-lg">Read</h1>



<!-- data table -->
<table style="border: 1px solid black;border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 1px solid black; border-collapse: collapse;">No</th>
            <th style="border: 1px solid black; border-collapse: collapse;">First Name</th>
            <th style="border: 1px solid black; border-collapse: collapse;">Last Name</th>
            <th style="border: 1px solid black; border-collapse: collapse;">Email</th>
            <th style="border: 1px solid black; border-collapse: collapse;">Phone Number</th>
            <th style="border: 1px solid black; border-collapse: collapse;">Alamat</th>
            <th style="border: 1px solid black; border-collapse: collapse;">Action</th>
        </tr>
    </thead>


    <tbody>



        <?php foreach ($speakers as $speaker) : ?>
            <tr>
                <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $no ?> </td>
                <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $speaker['0']; ?></td>
                <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $speaker['1']; ?></td>
                <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $speaker['2']; ?></td>
                <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $speaker['3']; ?></td>
                <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $speaker['4']; ?></td>

                <td style="border: 1px solid black; border-collapse: collapse;">
                    <a href="?p=detail">Detail</a>
                    <a href="?p=update">Update</a>
                    <a href="?p=update">Delete</a>
                </td>
            </tr>
            <?php $no++ ?>
        <?php endforeach ?>

    </tbody>
</table>
<!-- end data table -->