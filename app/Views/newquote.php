<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5 space-above">
  <form id="quoteForm" method="post" action="/science/new">
    <select class="form-select" aria-label="Select A Character" name="character" required>
      <option value="" selected disabled hidden>Select A Character</option>
      <option value="Cave Johnson">Cave Johnson</option>
      <option value="GLaDOS">GLaDOS</option>
      <option value="Wheatley">Wheatley</option>
    </select>
    <div class="mb-3">
      <label for="mytextarea" class="form-label">Quote</label>
      <textarea style="height: 150px;" class="form-control" id="mytextarea" name="post_content" aria-describedby="emailHelp" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <?php if (isset($ispost)) : ?>
    <span class="badge text-bg-success">Success</span>
  <?php endif ?>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
<script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/formats/xhtml.min.js"></script>
<script>
  // SCeditor (Text box for submitting quotes)
  var textarea = document.getElementById('mytextarea');
  console.log(textarea);
  sceditor.create(textarea, {
    format: 'xhtml',
    style: 'https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/content/modern.min.css'
  });
</script>



<?= $this->endSection() ?>