<?php

	if (session()->has('error'))
	{
		echo '<div class="row">';
		echo '<div class="col-xl-12 mb-2">';

		if (is_array(session()->error))
		{
			foreach (session()->error as $key => $value)
			{
				echo '<div class="alert alert-danger alert-dismissible show fade">
					<div class="alert-body">
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
						' . $value . '
					</div>
				</div>';
			}
		}
		else
		{
			echo '<div class="alert alert-danger alert-dismissible show fade">
				<div class="alert-body">
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
					' . session()->error . '
				</div>
			</div>';
		}

		echo '</div>';
		echo '</div>';
	}

	if (session()->has('success'))
	{
		echo '<div class="row">';
		echo '<div class="col-xl-12 mb-2">';

		if (is_array(session()->success))
		{
			foreach (session()->success as $key => $value)
			{
				echo '<div class="alert alert-success alert-dismissible show fade">
						<div class="alert-body">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
							' . $value . '
						</div>
					</div>';
			}
		}
		else
		{
			echo '<div class="alert alert-success alert-dismissible show fade">
					<div class="alert-body">
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
						' . session()->success . '
					</div>
				</div>';
		}

		echo '</div>';
		echo '</div>';
	}
