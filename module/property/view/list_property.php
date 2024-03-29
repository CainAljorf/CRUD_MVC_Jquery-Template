<section class="section novi-background breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">Properties</h6>
                    <h2 class="text-uppercase breadcrumbs-custom-title">Properties</h2>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Properties</li>
                </ul>
            </div>
        </div>
    </section>
<section class="section novi-background section-lg">
    <div class="container">
        <table>
            <tr>
                <th>
                    <h3 align="center">ADD one record</h3>
                    <p align="center"><a href="index.php?page=controller_property&op=create" class="add-button"><i class="fas fa-plus large-icon"></i></a></p>
                </th>
                <th>
                    <h3 align="center">ADD with Dummies</h3>
                    <p align="center"><a href="index.php?page=controller_property&op=dummies" class="add-button"><i class="fas fa-plus large-icon"></i></a></p>
                </th>
                <th>
                    <h3 align="center">Delete All</h3>
                    <p align="center"><a href="index.php?page=controller_property&op=delete_all" class="add-button"><i class="fas fa-trash large-icon"></i></a></p>
                </th>
            </tr>
        </table>
        <br>
        <div class="row title-row">
            <h2>Properties list</h2>
        </div>
        <div class="row title-row">
            <table>
                <tr>
                    <th width=125><b>Cadastral Reference</b></th>
                    <th width=125><b>Square Meters</b></th>
                    <th width=125><b>Property Type</b></th>
                    <th width=125><b>Number of Rooms</b></th>
                    <th width=125><b>Comment</b></th>
                    <th width=125><b>Characteristics</b></th>
                    <th width=125><b>Date of Publication</b></th>
                    <th width=125><b>Price</b></th>
                    <th width=350><b>Action</b></th>
                </tr>
                <?php
                if ($rdo->num_rows === 0) {
                    echo '<tr>';
                    echo '<td align="center" colspan="8">No Properties Found</td>';
                    echo '</tr>';
                } else {
                    foreach ($rdo as $row) {
                        echo '<tr>';
                        echo '<td width=125>' . $row['cadastral_reference'] . '</td>';
                        echo '<td width=125>' . $row['square_meters'] . '</td>';
                        echo '<td width=125>' . $row['property_type'] . '</td>';
                        echo '<td width=125>' . $row['number_of_rooms'] . '</td>';
                        echo '<td width=125>' . $row['comment'] . '</td>';
                        echo '<td width=125>' . $row['characteristics'] . '</td>';
                        echo '<td width=125>' . $row['date_publication'] . '</td>';
                        echo '<td width=125>' . $row['price'] . '</td>';
                        echo '<td width=350>';
                        print("<span class='cadastral_reference Button_blue' id='" . $row['cadastral_reference'] . "'><i class='fas fas fa-eye'></i></span>");
                        // echo '<a class="Button_blue" href="index.php?page=controller_property&op=read&id=' . $row['cadastral_reference'] . '"><i class="fas fa-eye"></i></a>';
                        echo '&nbsp;';
                        echo '<a class="Button_green" href="index.php?page=controller_property&op=update&id=' . $row['cadastral_reference'] . '"><i class="fas fa-edit"></i></a>';
                        echo '&nbsp;';
                        echo '<a class="Button_red" href="index.php?page=controller_property&op=delete&id=' . $row['cadastral_reference'] . '"><i class="fas fa-trash"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</section>
<!-- Modal -->
<section id="property_modal">

</section>