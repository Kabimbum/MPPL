<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadKTM(id) {
        const ktmCard = document.getElementById('ktm-card-' + id);

        html2canvas(ktmCard, { useCORS: true, scale: 2 }).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
            const link = document.createElement('a');
            link.href = imgData;
            link.download = 'KTM_Mahasiswa_' + id + '.png';
            link.click();
        }).catch(err => {
            console.error("Failed to render image:", err);
        });
    }
</script>