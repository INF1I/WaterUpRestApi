<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:25
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="Plant")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class Plant
{
    /**
     * This column holds the unique record identification code that is generated by the database upon record creation.
     *
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     */
    protected $name;
    protected $moisterNeed;
    protected $dutchName;
    protected $description;
    protected $preferredLowerTemperature;
    protected $preferredUpperTemperate;
    protected $preferredLuminosity;

    /**
     * This column holds the date the record was created.
     *
     * @var \DateTime
     * @ORM\Column(name="date_added", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $dateAdded;

    /**
     * This column holds the timestamp of last update of the record.
     *
     * @var \DateTime
     * @ORM\Column(name="date_updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $dateUpdated;

    /**
     * This column holds the timestamp of the date the record was soft deleted. The record will still exist in the
     * database but marked as unactive.
     *
     * @var \DateTime
     * @ORM\Column(name="date_removed", type="datetime", nullable=true)
     */
    protected $dateRemoved;
}