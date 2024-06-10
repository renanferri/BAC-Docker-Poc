<?php

$param = getenv('PARAMETER');

echo "Maria Isabel: $param !";

// docker run --rm -v $(pwd):/usr/src/myapp -w /usr/src/myapp  php:8.2 php index.php

// docker run --rm -v $(pwd):/usr/src/myapp -w /usr/src/myapp -p 8000:8000 php:8.2 php -S 0.0.0.0:8000 index.php

// docker run --rm -v $(pwd):/usr/src/myapp -w /usr/src/myapp -e PARAMETER=boinha  php:8.2 php index.php

// docker run --rm -v $(pwd):/usr/src/myapp -w /usr/src/myapp --env-file=./.env php:8.2 php index.php