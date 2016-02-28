<!-- progress bar -->
<script>

function size_of_associative_array(a)
{
    var size = 0;

    for (key in a)
    {
        size++;
    }
    return (size);
}

function get_index_position(index)
{
    var position = 0;
    var found = false;

    for (key in g_answers)
    {
        if (index == key)
        {
            found = true;
            break;
        }
        position++;
    }
    if (found == false) return (-1);
    return (position);
}

var total_number_of_tests = size_of_associative_array(g_answers);
var cur_position;
var percentage;

current_index = location.pathname;
cur_position = get_index_position(current_index);
if (cur_position >= 0)
{
    percentage = Math.round(cur_position * 100 / total_number_of_tests);
}
else
{
    percentage = 0;
}

</script>

<div id="progress_bar" class="progress">
<script>
                  document.write('<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="' + percentage + '" aria-valuemin="0" aria-valuemax="100" style="width:' + (percentage == 0? 3: percentage) + '%"> ' + percentage + '% Complete </div>');
</script>
</div>

<script>
if (cur_position == -1)
{
    progress_bar = document.getElementById('progress_bar');
    progress_bar.style.display = 'none';
}
</script>

<!-- end_progress bar -->
