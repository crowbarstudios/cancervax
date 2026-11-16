<?php require __DIR__ . '/shared-footer.php'; ?>

<!-- Team popup remains inside the homepage boundary for its scoped styling. -->
<div id="team-popup" class="mfp-hide transition-all z-50 bg-[rgba(0,0,0,0.5)] h-screen fixed top-0 left-0 right-0">
    <div class="team-popup-content bg-white w-auto sm:max-w-[500px] lg:max-w-[800px] my-2 sm:my-7 mx-2 sm:mx-auto relative !rounded-md">
        <h2 class="team-popup-title text-black text-xl leading-normal font-medium p-4"></h2>
        <button title="Close (Esc)" type="button" class="mfp-close text-black mt-2.5 mr-[5px] text-[44px]">×</button>
        <div class="team-popup-body overflow-y-auto max-h-[600px]"></div>
    </div>
</div>

<?php if (in_array($page, ['', 'home-sep-2'], true)): ?>
</div><!-- /#cvax-home-reference: homepage content, shared footer and team modal -->
<?php endif; ?>

<script
src="https://widgets.leadconnectorhq.com/loader.js"
data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js"
data-widget-id="692e23d5fdb7681dffea583c" >
</script>

<script src="<?php echo $full_url; ?>assets/js/jquery-3.1.1.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $full_url; ?>assets/js/jquery.magnific-popup.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $full_url; ?>assets/js/slick.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $full_url; ?>assets/js/main.js?v=<?php echo time(); ?>"></script>

</body>
</html>
