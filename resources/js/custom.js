if( document.body.classList.contains('home') )
{    
    const btnDelete = document.querySelectorAll(".delete");

    for (let i = 0; i < btnDelete.length; i++)
    {
        btnDelete[i].addEventListener("click", function(event)
        {
            if (confirm("Are you sure to delete?") == false)
            {
                event.preventDefault();
            }
        });
    }
}
