<section class="py-12">
    <div class="container">
        <div id="pdf-container" class="w-full"></div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

const pdfUrl = '<?php echo $full_url; ?>assets/lifescience-review.pdf';
const container = document.getElementById('pdf-container');

pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
    const totalPages = pdf.numPages;
    for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
        pdf.getPage(pageNum).then(function(page) {
            const viewport = page.getViewport({ scale: 1.5 });
            const canvas = document.createElement('canvas');
            canvas.className = 'w-full block mb-4 shadow-md';
            canvas.width = viewport.width;
            canvas.height = viewport.height;
            canvas.style.maxWidth = '100%';
            canvas.style.height = 'auto';
            // Insert pages in order
            canvas.dataset.page = page.pageNumber;
            container.appendChild(canvas);
            page.render({ canvasContext: canvas.getContext('2d'), viewport: viewport });
        });
    }
});
</script>
