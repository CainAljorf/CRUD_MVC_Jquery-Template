<section class="section novi-background section-lg">
    <form autocomplete="on" method="post" name="delete_property" id="delete_property">
        <table border='0' class="table-style">
            <tr>
                <th align="center" colspan="2"><p class="confirmation-text">Are you sure you want to delete the property with cadastral reference <b><?php echo $_GET['id']; ?></b>, property type <b><?php echo $property['property_type']; ?></b> and with a price of <b><?php echo $property['price']; ?></b> ?</p></th>
                <input type="hidden" name="cadastral_reference" value="<?php echo $_GET['id']; ?>">
            </tr>
            <tr>
                <td align="center" width=680><input type="button" class="Button_green" name="Submit" onclick="operations_property('delete')" value="Yes, delete it"></input></td>
                <td align="center" width=680><a class="Button_red" href="index.php?page=controller_property&op=list">Cancel</a></td>
            </tr>
        </table>
    </form>
</section>