<?php
/*
 * Template Name: Workout Template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

    <section class="top-section" style="background: url('<?php echo CFS()->get( 'workout_background' ); ?>') no-repeat; background-size: cover; background-position-x: center">
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
      <div class="arrow"></div>
    </section>
    <section class="table-section">
      <div class="table-wrap">
        <div class="top table__headline table-radius">
          <p>Workout Information</p>
        </div>
        <div class="additional-wrap">
          <table class="main-table border content-table" id="workout">
            <tbody>
            <tr class="head">
              <th class="first">
                <a href="#">Workout date</a>
              </th>
              <th>
                <a href="#">Name</a>
              </th>
              <th>
                <a href="#">Location</a>
              </th>
              <th>
                <a href="#">Surface condition</a>
              </th>
              <th>
                <a href="#">Time</a>
              </th>
              <th>
                <a href="#">Distance</a>
              </th>
              <th class="fourth">
                <a href="#">Notes</a>
              </th>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
	</main>

<?php get_footer(); ?>
