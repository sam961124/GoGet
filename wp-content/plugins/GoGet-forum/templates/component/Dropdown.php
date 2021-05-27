<?php
$options = array();
foreach ($data['content'] as $value) {
    $temp_option = "";
    foreach ($value as $v) {
        $temp_option .= "<option value='" . $v . "'>" . $v . "</option>";
    }
    $options[] = $temp_option;
}
?>

<div id='dropdown_section' style='margin-bottom: 3px'>
    <p style='margin-bottom: -2px'> <label> <?php echo $data['field_title'] ?> </label> </p>
    <p style='font-size: 9px; color: #9c9c9c'> <?php echo $data['field_subtitle'] ?></p>
    <div id='dropdown'>
        <?php
        $cnt = 0;
        foreach ($data['content'] as $key => $value) {
            echo ("
            <label for='goget_" . $meta_key . "_" . $key . "'>
                <select id='goget_" . $meta_key . "_" . $key . "' name='goget_" . $meta_key . "[]" . "'> " . $options[$cnt] . " </select>
            </label>
        ");
            $cnt += 1;
        }
        ?>
    </div>
</div>