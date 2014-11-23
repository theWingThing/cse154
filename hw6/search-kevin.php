<?php
/*
select movies.name, a1.first_name, a1.last_name, a2.first_name, a2.last_name, movies.year from movies
join roles r1 on movies.id = r1.movie_id
join roles r2 on movies.id = r2.movie_id
join actors a1 on a1.id = r1.actor_id
join actors a2 on a2.id = r2.actor_id
where a1.first_name = "Kevin" and a2.first_name = "Stephen"
*/
?>