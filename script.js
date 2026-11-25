document.addEventListener('DOMContentLoaded', () => {
    const lightboxModal = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxDesc = document.getElementById('lightboxDesc');
    const lightboxTags = document.getElementById('lightboxTags');
    const closeBtn = document.querySelector('.lightbox-close');
    const lightboxContent = document.querySelector('.lightbox-content');
    const workCards = document.querySelectorAll('.work-card');

    function openLightbox(card) {
        const img = card.querySelector('img');
        const title = card.querySelector('h3').textContent;
        const desc = card.querySelector('p').textContent;
        const tagsHTML = card.querySelector('.work-tags').innerHTML;

        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
        lightboxTitle.textContent = title;
        lightboxDesc.textContent = desc;
        lightboxTags.innerHTML = tagsHTML;

        lightboxModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightboxModal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Attach click listeners to every 3D work card
    workCards.forEach((card) => {
        card.addEventListener('click', () => openLightbox(card));
    });

    // Close when clicking the X button or dark backdrop
    closeBtn.addEventListener('click', closeLightbox);
    lightboxModal.addEventListener('click', closeLightbox);

    // Prevent clicks inside the modal card from closing it
    lightboxContent.addEventListener('click', (e) => e.stopPropagation());

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightboxModal.classList.contains('active')) {
            closeLightbox();
        }
    });
});