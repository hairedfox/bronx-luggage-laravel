<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            'bronx-luggage-1fa1b84e54da.herokuapp.com',
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
