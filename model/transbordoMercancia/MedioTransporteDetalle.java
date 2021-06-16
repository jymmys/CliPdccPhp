/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

/**
 * @author ytorregl
 *
 */
public class MedioTransporteDetalle {
	
	private String chasisTransporte;
	private String codigoConductor;
	private String nombreConductor;
	private String nombreNaveAeronave;
	private String numeroNaveAeronave;
	private String numeroTransporte;
	private String numeroViaje;
	private String paisBandera;
	/**
	 * 
	 */
	public MedioTransporteDetalle() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param chasisTransporte
	 * @param codigoConductor
	 * @param nombreConductor
	 * @param nombreNaveAeronave
	 * @param numeroNaveAeronave
	 * @param numeroTransporte
	 * @param numeroViaje
	 * @param paisBandera
	 */
	public MedioTransporteDetalle(String chasisTransporte, String codigoConductor, String nombreConductor,
			String nombreNaveAeronave, String numeroNaveAeronave, String numeroTransporte, String numeroViaje,
			String paisBandera) {
		super();
		this.chasisTransporte = chasisTransporte;
		this.codigoConductor = codigoConductor;
		this.nombreConductor = nombreConductor;
		this.nombreNaveAeronave = nombreNaveAeronave;
		this.numeroNaveAeronave = numeroNaveAeronave;
		this.numeroTransporte = numeroTransporte;
		this.numeroViaje = numeroViaje;
		this.paisBandera = paisBandera;
	}
	/**
	 * @return the chasisTransporte
	 */
	public String getChasisTransporte() {
		return chasisTransporte;
	}
	/**
	 * @param chasisTransporte the chasisTransporte to set
	 */
	public void setChasisTransporte(String chasisTransporte) {
		this.chasisTransporte = chasisTransporte;
	}
	/**
	 * @return the codigoConductor
	 */
	public String getCodigoConductor() {
		return codigoConductor;
	}
	/**
	 * @param codigoConductor the codigoConductor to set
	 */
	public void setCodigoConductor(String codigoConductor) {
		this.codigoConductor = codigoConductor;
	}
	/**
	 * @return the nombreConductor
	 */
	public String getNombreConductor() {
		return nombreConductor;
	}
	/**
	 * @param nombreConductor the nombreConductor to set
	 */
	public void setNombreConductor(String nombreConductor) {
		this.nombreConductor = nombreConductor;
	}
	/**
	 * @return the nombreNaveAeronave
	 */
	public String getNombreNaveAeronave() {
		return nombreNaveAeronave;
	}
	/**
	 * @param nombreNaveAeronave the nombreNaveAeronave to set
	 */
	public void setNombreNaveAeronave(String nombreNaveAeronave) {
		this.nombreNaveAeronave = nombreNaveAeronave;
	}
	/**
	 * @return the numeroNaveAeronave
	 */
	public String getNumeroNaveAeronave() {
		return numeroNaveAeronave;
	}
	/**
	 * @param numeroNaveAeronave the numeroNaveAeronave to set
	 */
	public void setNumeroNaveAeronave(String numeroNaveAeronave) {
		this.numeroNaveAeronave = numeroNaveAeronave;
	}
	/**
	 * @return the numeroTransporte
	 */
	public String getNumeroTransporte() {
		return numeroTransporte;
	}
	/**
	 * @param numeroTransporte the numeroTransporte to set
	 */
	public void setNumeroTransporte(String numeroTransporte) {
		this.numeroTransporte = numeroTransporte;
	}
	/**
	 * @return the numeroViaje
	 */
	public String getNumeroViaje() {
		return numeroViaje;
	}
	/**
	 * @param numeroViaje the numeroViaje to set
	 */
	public void setNumeroViaje(String numeroViaje) {
		this.numeroViaje = numeroViaje;
	}
	/**
	 * @return the paisBandera
	 */
	public String getPaisBandera() {
		return paisBandera;
	}
	/**
	 * @param paisBandera the paisBandera to set
	 */
	public void setPaisBandera(String paisBandera) {
		this.paisBandera = paisBandera;
	}


	

}
