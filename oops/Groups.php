<?php

namespace Cogneti\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", indexes={@ORM\Index(name="image_resource", columns={"image_resource"}), @ORM\Index(name="organization_id", columns={"organization_id"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="organization_id", type="integer", nullable=false)
     */
    private $organizationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_lead", type="integer", nullable=false)
     */
    private $groupLead;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_date", type="datetime", nullable=true)
     */
    private $registerDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type=0;

    /**
     *
     * @var \Cogneti\Entity\Userresources 
     * @ORM\ManyToOne(targetEntity="Cogneti\Entity\Userresources")
     * @ORM\JoinColumns({
     *          @ORM\JoinColumn(name="image_resource", referencedColumnName="user_resource_id")
     *      })
     */
    
    private $imageResource;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated_time", type="datetime", nullable=true)
     */
    private $lastUpdatedTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxposition", type="integer", nullable=false)
     */
    private $maxposition = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="country", type="integer", nullable=false)
     */
    private $country = '254';

    /**
     * @var integer
     *
     * @ORM\Column(name="region", type="integer", nullable=false)
     */
    private $region;

    /**
     * @var integer
     *
     * @ORM\Column(name="city", type="integer", nullable=false)
     */
    private $city = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="inactivity_nudge_threshold", type="integer", nullable=true)
     */
    private $inactivityNudgeThreshold = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="session_report", type="boolean", nullable=true)
     */
    private $sessionReport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trainer_report", type="smallint", nullable=true)
     */
    private $trainerReport = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="grouplead_report", type="smallint", nullable=true)
     */
    private $groupleadReport = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="nudge_message", type="boolean", nullable=true)
     */
    private $nudgeMessage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="follows_message", type="boolean", nullable=true)
     */
    private $followsMessage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="levels_up_message", type="boolean", nullable=true)
     */
    private $levelsUpMessage = '0';
    
    
    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set organizationId
     *
     * @param integer $organizationId
     * @return Groups
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;

        return $this;
    }

    /**
     * Get organizationId
     *
     * @return integer 
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     * @return Groups
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer 
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Groups
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Groups
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set groupLead
     *
     * @param integer $groupLead
     * @return Groups
     */
    public function setGroupLead($groupLead)
    {
        $this->groupLead = $groupLead;

        return $this;
    }

    /**
     * Get groupLead
     *
     * @return integer 
     */
    public function getGroupLead()
    {
        return $this->groupLead;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     * @return Groups
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime 
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Groups
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

	/**
	 * @param \Cogneti\Entity\Userresources $imageResource
	 */
    public function setImageResource($imageResource)
    {
        $this->imageResource = $imageResource;

        return $this;
    }

	/**
	 * @return Userresources
	 */
    public function getImageResource()
    {
        return $this->imageResource;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Groups
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set lastUpdatedTime
     *
     * @param \DateTime $lastUpdatedTime
     * @return Groups
     */
    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->lastUpdatedTime = $lastUpdatedTime;

        return $this;
    }

    /**
     * Get lastUpdatedTime
     *
     * @return \DateTime 
     */
    public function getLastUpdatedTime()
    {
        return $this->lastUpdatedTime;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Groups
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set maxposition
     *
     * @param integer $maxposition
     * @return Groups
     */
    public function setMaxposition($maxposition)
    {
        $this->maxposition = $maxposition;

        return $this;
    }

    /**
     * Get maxposition
     *
     * @return integer 
     */
    public function getMaxposition()
    {
        return $this->maxposition;
    }

    /**
     * Set country
     *
     * @param integer $country
     * @return Groups
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return integer 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return Groups
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return integer 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set city
     *
     * @param integer $city
     * @return Groups
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return integer 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set inactivityNudgeThreshold
     *
     * @param integer $inactivityNudgeThreshold
     * @return Groups
     */
    public function setInactivityNudgeThreshold($inactivityNudgeThreshold)
    {
        $this->inactivityNudgeThreshold = $inactivityNudgeThreshold;

        return $this;
    }

    /**
     * Get inactivityNudgeThreshold
     *
     * @return integer 
     */
    public function getInactivityNudgeThreshold()
    {
        return $this->inactivityNudgeThreshold;
    }

    /**
     * Set sessionReport
     *
     * @param boolean $sessionReport
     * @return Groups
     */
    public function setSessionReport($sessionReport)
    {
        $this->sessionReport = $sessionReport;

        return $this;
    }

    /**
     * Get sessionReport
     *
     * @return boolean 
     */
    public function getSessionReport()
    {
        return $this->sessionReport;
    }

    /**
     * Set trainerReport
     *
     * @param integer $trainerReport
     * @return Groups
     */
    public function setTrainerReport($trainerReport)
    {
        $this->trainerReport = $trainerReport;

        return $this;
    }

    /**
     * Get trainerReport
     *
     * @return integer 
     */
    public function getTrainerReport()
    {
        return $this->trainerReport;
    }
    
    /**
     * Set groupleadReport
     *
     * @param integer $groupleadReport
     * @return Groups
     */
    public function setGroupleadReport($groupleadReport)
    {
    	$this->groupleadReport = $groupleadReport;
    
    	return $this;
    }
    
    /**
     * Get groupleadReport
     *
     * @return integer
     */
    public function getGroupleadReport()
    {
    	return $this->groupleadReport;
    }
    
    /**
     * Set nudgeMessage
     *
     * @param boolean $nudgeMessage
     * @return Groups
     */
    public function setNudgeMessage($nudgeMessage)
    {
    	$this->nudgeMessage = $nudgeMessage;
    
    	return $this;
    }
    
    /**
     * Get nudgeMessage
     *
     * @return boolean
     */
    public function getNudgeMessage()
    {
    	return $this->nudgeMessage;
    }
    
    /**
     * Set followsMessage
     *
     * @param boolean $followsMessage
     * @return Groups
     */
    public function setFollowsMessage($followsMessage)
    {
    	$this->followsMessage = $followsMessage;
    
    	return $this;
    }
    
    /**
     * Get followsMessage
     *
     * @return boolean
     */
    public function getFollowsMessage()
    {
    	return $this->followsMessage;
    }
    

    /**
     * Set levelsUpMessage
     *
     * @param boolean $levelsUpMessage
     * @return Groups
     */
    public function setLevelsUpMessage($levelsUpMessage)
    {
    	$this->levelsUpMessage = $levelsUpMessage;
    
    	return $this;
    }
    
    /**
     * Get levelsUpMessage
     *
     * @return boolean
     */
    public function getLevelsUpMessage()
    {
    	return $this->levelsUpMessage;
    }
    
}
