$(document).ready(function () {
    function repositionHoverX(hoverDetails) {
        // save current display
        const prevDisplay = hoverDetails.style.display;

        // temporarily show for measurement (without breaking hover toggle)
        hoverDetails.style.visibility = 'hidden';
        hoverDetails.style.display = 'flex'; 

        const rect = hoverDetails.getBoundingClientRect();

        if (rect.right > window.innerWidth) {
            hoverDetails.style.left = 'auto';
            hoverDetails.style.right = '110%';
        } else {
            hoverDetails.style.right = 'auto';
            hoverDetails.style.left = '110%';
        }

        // restore state (let Tailwind handle hidden/flex)
        hoverDetails.style.visibility = '';
        hoverDetails.style.display = prevDisplay;
    }

    function repositionHoverY(hoverDetails){
        const prevDisplay = hoverDetails.style.display;

        hoverDetails.style.visibility = 'hidden';
        hoverDetails.style.flex = 'flex';

        const rect = hoverDetails.getBoundingClientRect();

        if(rect.top < 0){
            hoverDetails.style.top = '70%';
            hoverDetails.style.bottom = 'auto'
        }else{
            hoverDetails.style.top = 'auto';
            hoverDetails.style.bottom = '50%';
        }

        hoverDetails.style.visibility = '';
        hoverDetails.style.display = prevDisplay;

    }

    // Add hover listener to each card
    document.querySelectorAll('#grid-container .group').forEach(card => {
        const hoverDetails = card.querySelector('.hover-details');

        card.addEventListener('mouseenter', () => {
            repositionHoverX(hoverDetails);
        });

        card.addEventListener('mouseleave', () => {
            repositionHoverX(hoverDetails);
        });

        card.addEventListener('mouseenter', () => {
            repositionHoverY(hoverDetails);
        });

        card.addEventListener('mouseleave', () => {
            repositionHoverY(hoverDetails);
        });

    });
});
