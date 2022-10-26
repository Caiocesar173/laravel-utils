<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\CurrencyFactory;
use Caiocesar173\Utils\Exceptions\DefaultCurrencyException;
use Illuminate\Database\Eloquent\Factories\Factory;

class Currency extends ModelAbstract
{
    protected $table = 'currencies';
    protected $primaryKey = 'id';

    protected $fillable = [
        "country",
        "symbol",
        "code",
        "name",
    ];

    /**
     * Get the default coin 
     *
     * @return Caiocesar173\Utils\Entities\Currency or @return false
     */
    public function getDefaultCurrency($primaryCode = 'BRL', $secondaryCode = 'USD')
    {
        $currency = $this->getByCode($primaryCode);
        if ($currency) return $currency;
        else {
            $currency = $this->getByCode($secondaryCode);
            if ($currency) return $currency;
        }

        return false;
    }

    /**
     * Get the currency by his code.
     *
     * @return Caiocesar173\Utils\Entities\Currency or @return false
     */
    public function getByCode($code)
    {
        $currency = $this::where('code', $code)->first();
        return !is_null($currency) ? $currency : false;
    }

    /**
     * Verify if a currency code has been supplied.
     * Then checks if it's a real coin code.
     *
     * @return Caiocesar173\Utils\Entities\Currency or @throws Caiocesar173\Utils\Exceptions\DefaultCurrencyException
     */
    public static function verifyCurrency($currencyCode): Currency
    {
        if (!isset($currencyCode))
            $currency = static::getDefaultcurrencyCode();
        else
            $currency = static::getByCode($currencyCode);

        if (!$currency)
            throw new DefaultCurrencyException();

        return $currency;
    }

    /**
     * Get the resource country.
     *
     * @return Model
     */
    public function country()
    {   
        if(is_null($this->country)) return $this->country;
        
        if (env('UTILS_GEOLOC_ENABLE'))
            return $this->belongsTo(Country::class, 'country', 'id');

        return $this->country;
    }

    protected static function newFactory(): Factory
    {
        return CurrencyFactory::new();
    }
}
