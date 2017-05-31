<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 09:42
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace StendenINF1I\WaterupRestApiBundle\Entity;


use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;
use Doctrine\ORM\Mapping as ORM;
use StendenINF1I\WaterupRestApiBundle\Entity\Client as OAuthClient;
use StendenINF1I\WaterupRestApiBundle\Entity\MobileUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="AuthCode")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class AuthCode extends BaseAuthCode
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
     * This column holds an reference to the client entity.
     *
     * @ORM\ManyToOne(targetEntity="OAuthClient")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    protected $client;

    /**
     * This column holds an reference to the user entity.
     *
     * @ORM\ManyToOne(targetEntity="MobileUser")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * This column holds the timestamp of the date the record was soft deleted. The record will still exist in the
     * database but marked as unactive.
     *
     * @var \DateTime
     * @ORM\Column(name="date_removed", type="datetime", nullable=true)
     */
    protected $dateRemoved;
}