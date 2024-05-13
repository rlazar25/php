<?php require('pets.php'); ?>
<?php require('partials/top.php'); ?>
    <h1>Welcome To PetShop</h1>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Pet</th>
                            <th>Type</th>
                            <th>Owner</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pets as $pet): ?>
                            <tr>
                                <td>
                                    <?php echo $pet["name"] ?>
                                </td>
                                <td>
                                    <?php echo $pet["type"] ?>
                                </td>
                                <td>
                                    <?php echo $pet["owner"] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require('partials/bottom.php'); ?>