<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPersistance
{
    use HasPersistentClear;
    use HasPersistentCounter;
    use HasPersistentHint;
    use HasPersistentPlaceholder;
}
